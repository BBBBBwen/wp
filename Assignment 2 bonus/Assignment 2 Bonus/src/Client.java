import java.io.*;
import java.net.*;
import java.awt.*;
import java.awt.event.*;

public class Client {
	private TextArea textArea;
	private TextField textField;
	private Socket socket;
	private OutputStream outputStream;
	private InputStream inputStream;

	public static void main(String[] args) throws UnknownHostException, IOException {
		Client client = new Client();
		client.createUI();
		client.createClient();
		client.createThread();
	}

	public void createThread() {
		ClientReader reader = new ClientReader(this);
		reader.start();
	}

	public void createClient() throws UnknownHostException, IOException {
		socket = new Socket("localhost", 1234);
		outputStream = socket.getOutputStream();
		inputStream = socket.getInputStream();
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

	public void createUI() {
		Frame frame = new Frame("Client");
		textArea = new TextArea();
		textField = new TextField();
		Button send = new Button("send");
		Panel panel = new Panel();
		panel.setLayout(new BorderLayout());
		panel.add(textField, "Center");
		panel.add(send, "East");
		frame.add(textArea, "Center");
		frame.add(panel, "South");
		ClientWriter riter = new ClientWriter(this);
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


