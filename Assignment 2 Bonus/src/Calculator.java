public class Calculator {
	private static int p;

	public Calculator(String string) {
		char[] strChar = string.toCharArray();
		String result = "";
		for (int i = 0; i < strChar.length; i++) {
			result += Integer.toBinaryString(strChar[i]) + " ";
		}
		validate(result);
	}

	static public void printArray(String s, int[] a) {
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

	public static String getFromArray(int[] a) {
		String str = " ";
		int i = 0;
		while (i < a.length) {
			str = str + a[i] + " ";
			i++;
		}
		return str;
	}

	public static int[] BinaryGenerate(String i) {
		// initialize the array
		int[] bry = new int[i.length()];
		// put in the number one by one
		for (int a = 0; a < i.length(); a++) {
			bry[a] = i.charAt(a);
			// determine if even or odd
			if (bry[a] % 2 == 0) {
				bry[a] = 0;
			} else {
				bry[a] = 1;
			}
		}
		return bry;
	}

	public static int[] HammingCodeGenerate(int[] Binary) {
		int m = Binary.length;
		// determine the R_ locations
		for (int j = 0;; j++) {
			if (Math.pow(2, j) >= m + j + 1) {
				p = j;
				break;
			}
		}
		// initialize the arrays
		int[] ham = new int[m + p];
		int[] hamming = new int[m];
		int[] PCount = new int[p];
		int count = 0;
		int s = m - 1;
		for (int h = 0; h < m; h++) {
			// Store numbers backwards;
			hamming[h] = Binary[s];
			s--;
		}
		for (int a = 0; a < ham.length; a++) {
			if (parity(a, ham)) {
				// Find out where parity is
				PCount[count] = a;
				// parity number
				count++;
			} else {
				ham[a] = hamming[a - count];
				// Store number into hamming code
			}
		}
		for (int k = 0; k < p; k++) {
			// Store parity into hamming code
			ham[PCount[k]] = EvenParity(PCount[k], ham);
		}
		int[] HMbackward = new int[m + p];
		int Backw = m + p - 1;
		for (int h = 0; h < m + p; h++) {
			// Store hammingcode backwards,so it display correctly;
			HMbackward[h] = ham[Backw];
			Backw--;
		}
		return HMbackward;
	}

	public static void validate(String str) {
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
			for (int h = 0; h < str.length(); h++) {
				HMbackward[h] = ham[Backw];
				Backw--;
			}
			printArray("\nthe Correct cide are ", HMbackward);
		}
	}

	public static boolean parity(int i, int[] str) {
		// Find out parity;
		for (int j = 0; j < p; j++) {
			if (i == Math.pow(2, j) - 1) {
				return true;
			}
		}
		return false;
	}

	public static int EvenParity(int py, int[] bry) {
		int pt = 0;
		for (int c = py; c < bry.length; c += 2 * (py + 1)) {
			// Determine interval among numbers;
			for (int j = c; j < Math.min(c + py + 1, bry.length); j++) {
				// pull out each number;
				if (bry[j] == 1) {
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