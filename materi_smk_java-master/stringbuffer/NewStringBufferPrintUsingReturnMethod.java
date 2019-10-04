public class NewStringBufferPrintUsingReturnMethod {
    public static void main(String[] args) {
        String a = "I love ";
        String b = "programming";
        System.out.println(mergeText(a, b));
    }

    static String mergeText(String a, String b) {
        return a+b;
    }
}