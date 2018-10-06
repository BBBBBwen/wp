import java.awt.*;
import java.awt.event.*;
import java.io.*;
import java.net.*;

public class Server {
	private TextArea textArea;
	private TextField textField;
	private ServerSocket serverSocket;
	private Socket socket;
	private OutputStream outputStream;
	private InputStream inputStream;

	public static void main(String[] args) throws IOException {
		Server server = new Server();
		server.createUI();
		server.createServer();
		server.createThread();
	}

	public void createServer() throws IOException {
		serverSocket = new ServerSocket(1234);//creat server socket and port;
		socket = serverSocket.accept();//start listening to;
		inputStream = socket.getInputStream();//creat input stream;
		outputStream = socket.getOutputStream();//creat output stream;
	}

	public void createThread() {
		ServerReader reader = new ServerReader(this);
		reader.start();
	}

	public InputStream getInputStream() {
		return inputStream;
	}

	public DataOutputStream getOutputStream() {
		DataOutputStream outputStream = new DataOutputStream(this.outputStream);
		return outputStream;
	}

	public TextArea getTextArea() {
		return textArea;
	}

	public TextField getTextField() {
		return textField;
	}

	public void createUI() {// creat user interface;
		Frame frame = new Frame("Server");//initial frame of gui;
		textArea = new TextArea();
		textField = new TextField();
		Button send = new Button("send");
		Panel panel = new Panel();
		panel.setLayout(new BorderLayout());
		panel.add(textField, "Center");//assign places;
		panel.add(send, "East");//assign button;
		frame.add(textArea, "Center");
		frame.add(panel, "South");
		ServerWriter riter = new ServerWriter(this);
		send.addActionListener(riter);
		textField.addActionListener(riter);
		frame.addWindowListener(new WindowAdapter() {
			public void windowClosing(WindowEvent e) {
				System.exit(0);
			}
		});
		frame.setSize(400, 400);
		frame.setVisible(true);
	}

	public void close() throws IOException {
			inputStream.close();
			outputStream.close();
			socket.close();
	}
}