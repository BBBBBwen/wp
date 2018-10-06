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
			String msg = textField.getText();//get message form server side;
			server.getTextArea().append("me: " + msg + "\n");//add message to text area;
				try {
					server.getOutputStream().writeUTF(msg);//get output stream from server;
				} catch (IOException e1) {
					// TODO Auto-generated catch block
					e1.printStackTrace();
				}
		}
	}