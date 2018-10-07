import java.awt.TextField;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.IOException;

class ClientWriter implements ActionListener {
	// set text when send clicked for Client.
	private Client client;

	public ClientWriter(Client client) {
		this.client = client;
	}

	public void actionPerformed(ActionEvent e) {
		TextField textField = client.getTextField();
		String msg = textField.getText();// get message form client side;
		client.getTextArea().append("me: " + msg + "\n");// add message to text area;
		try {
			client.getOutputStream().writeUTF(msg);// get output stream from client side;
		} catch (IOException e1) {
			// TODO Auto-generated catch block
			e1.printStackTrace();
		}
	}
}