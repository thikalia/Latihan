import java.util.ArrayList;
import java.util.List;

class ListExample {
    public static void main(String[] args) {
        List<String> stringList = new ArrayList<String>();
        
        for(int i = 1; i <= 10; i++) {
            stringList.add("Angka "+ String.valueOf(i));
        }

        for(String value : stringList) {
            if (value.charAt(value.length()-1)%2 == 0) {
                System.out.println(value + ": adalah bilangan genap");
            } else {
                System.out.println(value + ": adalah bilangan ganjil");
            }
        }
    }
}