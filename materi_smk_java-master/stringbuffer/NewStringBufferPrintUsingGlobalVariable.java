public class NewStringBufferPrintUsingGlobalVariable {
    static String a = "String in global variable";
    static String b;
    public static void main(String[] args) {
        b = "String in global variable. Instance in main method";
        prinText();
    }

    static void prinText() {
        System.out.println(a);
        System.out.println(b);
    }
}