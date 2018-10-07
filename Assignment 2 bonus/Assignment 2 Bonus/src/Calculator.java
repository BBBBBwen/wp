public class Calculator {
	public Calculator(String string) {
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
		int j = ham.length - 1;
		int[] HMbackward = new int[str.length()];
		int Backw = str.length() - 1;
		// find the first R_

		for (int i = 0; i < ham.length; i++) {
			ham[j] = str.charAt(i) - 48;
			// get 1 or 0;
			j--;
		}
		for (int i = 0; i < ham.length; i++) {
			// find out err position;
			if (parity(i, ham)) {
				if (EvenParity(i, ham) == 1) {
					err += i;
				}
			}
		}
		if (err == -1) {
			System.out.print("Received codes are valid");
		} else {
			System.out.print("Received codes are invalid. Found error at " + (err + 1));
			ham[err] = 1 - ham[err];
			// Correct error;
			for (int h = 0; h < str.length(); h++) {
				HMbackward[h] = ham[Backw];
				Backw--;
			}
			printArray("\nthe Correct cide are ", HMbackward);
		}
	}

	public boolean parity(int i, int[] str) {
		// Find out parity;
		int p;
		for (int j = 0;; j++) {
			if (Math.pow(2, j) >= str.length) {
				p = j;
				break;
			}
		}
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