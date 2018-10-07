import java.awt.*;
import java.awt.event.*;
import java.io.*;
import java.net.*;

public class Server extends Abstract {
	private ServerSocket serverSocket;
	private Socket socket;

	public static void main(String[] args) throws IOException {
		Server server = new Server();
		server.createUI();
		server.createServer();
		server.createThread();
	}

	@Override
	public void createUI() {// creat user interface;
		Frame frame = new Frame("Server");// initialize of gui;
		Panel panel = new Panel();
		frame.setSize(600, 300);
		frame.setLocation(0, 0);
		textArea = new TextArea();
		textField = new TextField();
		Button send = new Button("send");
		panel.setLayout(new BorderLayout());// assign where text,button will be placed;
		panel.add(textField, "Center");
		panel.add(send, "East");
		frame.add(textArea, "Center");
		frame.add(panel, "South");
		ServerWriter riter = new ServerWriter(this);
		send.addActionListener(riter);// set action when send clicked;
		textField.addActionListener(riter);// textfield act when sent functioned;
		frame.addWindowListener(new WindowAdapter() {
			public void windowClosing(WindowEvent e) {
				System.exit(0);
				try {
					close();
				} catch (IOException e1) {
					// TODO Auto-generated catch block
					e1.printStackTrace();
				}
			}
		});
		frame.setVisible(true);
	}

	@Override
	public void createThread() {
		ServerReader reader = new ServerReader(this);
		reader.start();
	}

	@Override
	public void close() throws IOException {
		inputStream.close();
		outputStream.close();
		serverSocket.close();
		socket.close();
	}

	public void createServer() throws IOException {
		serverSocket = new ServerSocket(1234);// creat server socket and port;
		socket = serverSocket.accept();// start listening to;
		inputStream = socket.getInputStream();// creat input stream;
		outputStream = socket.getOutputStream();// creat output stream;
	}

}