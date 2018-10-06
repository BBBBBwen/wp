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
				msg = dataInputStream.readUTF();//get message from input stream and format with UTF code
				Calculator calculator = new Calculator(msg);//detect hamming code err from input stream;
				textArea.append("other: " + msg + "\n");//add text to text area;
			}
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}