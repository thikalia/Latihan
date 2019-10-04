import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class MapExample {
    public static void main(String[] args) {
        List<Map<String, String>> biodataList = new ArrayList<Map<String, String>>();

        Map<String, String> biodataAdam = new HashMap<String, String>();
        Map<String, String> biodataMuhammad = new HashMap<String, String>();

        biodataAdam.put("name", "Adam");
        biodataAdam.put("age", "17 Tahun");
        biodataAdam.put("gender", "Laki-laki");

        biodataMuhammad.put("name", "Muhammad");
        biodataMuhammad.put("age", "18 Tahun");
        biodataMuhammad.put("gender", "Laki-laki");

        biodataList.add(biodataAdam);
        biodataList.add(biodataMuhammad);

        for (Map<String, String> biodata : biodataList) {
            System.out.println("Nama: "+biodata.get("name"));
            System.out.println("Umur: "+biodata.get("age"));
            System.out.println("Jenis Kelamin: "+biodata.get("gender"));
            System.out.println("\n");
        }
    }
}