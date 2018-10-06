import java.awt.TextField;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.IOException;

class ClientWriter implements ActionListener {
	private Client client;

	public ClientWriter(Client client) {
		this.client = client;
	}

	public void actionPerformed(ActionEvent e) {
		TextField textField = client.getTextField();
		String msg = textField.getText();
		client.getTextArea().append("me: " + msg + "\n");
		try {
			client.getOutputStream().writeUTF(msg);
		} catch (IOException e1) {
			e1.printStackTrace();
		}
	}
}