public class NewStringBufferPrintUsingMethod {
    public static void main(String[] args) {
        StringBuffer s = new StringBuffer("Example of new String with StringBuffer instance");
        String s2 = "Example of new String without StringBuffer instance"; 
        printText(s, s2);
    }

    private static void printText(StringBuffer s, String s2) {
        System.out.println(s);
        System.out.println(s2);
    }
}