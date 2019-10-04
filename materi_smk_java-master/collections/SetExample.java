import java.util.HashSet;
import java.util.Set;

public class SetExample {
    public static void main(String[] args) {
        Set<String> stringSet = new HashSet<String>();
        stringSet.add("Value 1");
        stringSet.add("Value 2");
        stringSet.add("Value 3");
        

        for (String someString: stringSet) {
            System.out.println(someString);
        }
    }
}