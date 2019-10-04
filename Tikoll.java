import java.util.ArrayList;
public class Tikoll {
	public static void main(String[] args) {
		ArrayList<String> mus=new ArrayList<String>();
	mus.add("Ahmad");
    mus.add("Adi");
	mus.add("Krisna");
	mus.add("Bagus");
	mus.add("Rahmawan");
	//System.out.println(mus);
	mus.clear();
	for (String mu:mus ) {
		System.out.println(mu);
		
	}

	for (int i=0;i<mus.size() ;i++ ) {
		System.out.println(mus.get(i));	
		}
	}
}