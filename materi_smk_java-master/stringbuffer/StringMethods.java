public class StringMethods {
    public static void main(String[] args) {
        String s = "Hello ";
        System.out.println(s.concat("world"));
        System.out.println(s.substring(0, 4));
        System.out.println(s.length());
        System.out.println(s.replace("h", "w"));
        System.out.println(s.toLowerCase());
        System.out.println(s.toUpperCase());
    }
}