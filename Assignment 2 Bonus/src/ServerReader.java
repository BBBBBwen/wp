import java.awt.TextArea;
import java.io.DataInputStream;
import java.io.IOException;
import java.io.InputStream;

class ServerReader extends Thread {
		private Server server;

		public ServerReader(Server server) {
			this.server = server;
		}

		public void run() {
			String msg;
			InputStream inputStream = server.getInputStream();
			DataInputStream dataInputStream = new DataInputStream(inputStream);
			TextArea textArea = server.getTextArea();
			try {
				while (true) {
					msg = dataInputStream.readUTF();
					Calculator calculator = new Calculator(msg);
					textArea.append("other: " + msg + "\n");
				}
			} catch (IOException e) {
				e.printStackTrace();
			}
		}
	}