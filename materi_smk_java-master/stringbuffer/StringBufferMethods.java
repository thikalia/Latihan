public class StringBufferMethods {
    public static void main(String[] args) {
        StringBuffer s2 = new StringBuffer("hello ");
        System.out.println(s2.append("world"));
        System.out.println("\n");
        System.out.println(s2.insert(1, "unwanted"));
        System.out.println(s2.delete(1, 9));
        System.out.println(s2.reverse);
        System.out.println(s2.capacity());
    }
}