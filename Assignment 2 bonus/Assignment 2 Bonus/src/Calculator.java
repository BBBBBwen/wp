import java.util.Scanner;

public class Calculator {
	private static int p;
	public Calculator(String string) {
		System.out.println(string);
		validate(string);
	}

	public void printArray(String s, int[] a) {
		// create extra space for looking
		String str = (s + " ");
		int i = 0;
		// print the array
		while (i < a.length) {
			str = str + a[i] + " ";
			i++;
		}
		System.out.println(str);
	}
	public void validate(String str) {
		// initialize the array for input code
		int[] ham = new int[str.length()];
		int err = -1;
		// find the first R_
		for (int i = 0; i < ham.length; i++) {
			ham[i] = str.charAt(i) - 48;
			// get 1 or 0;
		}
		for (int i = 0; i < ham.length; i++) {
			// find out err position;
			if (parity(i, ham)) {
				if (EvenParity(i, ham) == 1) {
					err = err + i + 1;
				}
			}
		}
		if (err == -1) {
			System.out.print("Received codes are valid");
		} else {
			System.out.print("Received codes are invalid. Found error at " + (err + 1));
			ham[err] = 1 - ham[err];
			// Correct error;
			printArray("\nthe Correct cide are ", ham);
		}
	}

	public boolean parity(int i, int[] str) {
		// Find out parity;
		for (int j = 0; j < p; j++) {
			if (i == Math.pow(2, j) - 1) {
				return true;
			}
		}
		return false;
	}

	public int EvenParity(int py, int[] bry) {
		int pt = 0;
		for (int c = py; c < bry.length; c += 2 * (py + 1)) {
			// Determine interval among numbers;
			for (int j = c; j < Math.min(c + py + 1, bry.length); j++) {
				// pull out each number;
				if (bry[j] == 0) {
					pt++;
					// add each number together;
				}
			}
		}
		if (pt % 2 == 0) {
			// see if its even or odd
			return 0;
		} else {
			return 1;
		}
	}
}