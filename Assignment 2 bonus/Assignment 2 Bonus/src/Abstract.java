import java.awt.TextArea;
import java.awt.TextField;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;

public abstract class Abstract {
	protected OutputStream outputStream;
	protected InputStream inputStream;
	protected TextArea textArea;
	protected TextField textField;

	public abstract void createUI();// creat user interface;

	public abstract void createThread();// set up threads for muti user;

	public abstract void close() throws IOException;// for closing socket and other after close the windows;

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
}
