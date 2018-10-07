import java.io.*;
import java.net.*;
import java.awt.*;
import java.awt.event.*;

public class Client extends Abstract {
	private Socket socket;

	public static void main(String[] args) throws UnknownHostException, IOException {
		Client client = new Client();
		client.createUI();
		client.createClient();
		client.createThread();
	}

	@Override
	public void createUI() {// creat user interface;
		Frame frame = new Frame("Client");// initialize gui;
		Panel panel = new Panel();
		frame.setSize(600, 300);
		frame.setLocation(600, 0);
		textArea = new TextArea();
		textField = new TextField();
		Button send = new Button("send");
		panel.setLayout(new BorderLayout());// assign where text,button will be placed;
		panel.add(textField, "Center");
		panel.add(send, "East");
		frame.add(textArea, "Center");
		frame.add(panel, "South");
		ClientWriter riter = new ClientWriter(this);
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
		ClientReader reader = new ClientReader(this);
		reader.start();
	}

	@Override
	public void close() throws IOException {
		inputStream.close();
		outputStream.close();
		socket.close();
	}

	public void createClient() throws UnknownHostException, IOException {
		socket = new Socket("localhost", 1234);
		outputStream = socket.getOutputStream();
		inputStream = socket.getInputStream();
	}
}
