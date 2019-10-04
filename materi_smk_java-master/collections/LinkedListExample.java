import java.util.LinkedList;
import java.util.List;

public class LinkedListExample {
    public static void main(String[] args) {
        List<String> stringLinkedList = new LinkedList<String>();

        stringLinkedList.add("LinkedList value 1");
        stringLinkedList.add("LinkedList value 2");
        stringLinkedList.add("LinkedList value 3");

        for (String value : stringLinkedList) {
            System.out.println(value);
        }
    }
}