import java.awt.TextArea;
import java.io.DataInputStream;
import java.io.IOException;
import java.io.InputStream;

class ClientReader extends Thread {
	private Client client;

	public ClientReader(Client client) {
		this.client = client;
	}

	public void run() {
		String msg;
		InputStream inputStream = client.getInputStream();
		DataInputStream dataInputStream = new DataInputStream(inputStream);
		TextArea textArea = client.getTextArea();
		try {
			while (true) {
				msg = dataInputStream.readUTF();
				textArea.append("other side: " + msg + "\n");
			}
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
}