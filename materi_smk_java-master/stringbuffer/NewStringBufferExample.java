public class NewStringBufferExample {
    public static void main(String[] args) {
        StringBuffer s = new StringBuffer("Example of new String with StringBuffer instance");
        String s2 = "Example of new String without StringBuffer instance"; 
        System.out.println(s);
        System.out.println(s2);
    }
}