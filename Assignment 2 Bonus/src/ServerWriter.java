import java.awt.TextField;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.IOException;

class ServerWriter extends Server implements ActionListener {
		private Server server;

		public ServerWriter(Server server) {
			this.server = server;
		}

		public void actionPerformed(ActionEvent e) {
			TextField textField = server.getTextField();
			String msg = textField.getText();
			server.getTextArea().append("me: " + msg + "\n");
			try {
				server.getOutputStream().writeUTF(msg);
			} catch (IOException e1) {
				e1.printStackTrace();
			}
		}
	}