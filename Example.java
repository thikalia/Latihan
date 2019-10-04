import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
public class Example{
	private static ArrayList<String>names;
	public static void readInput()throws IOException {
		System.out.println("program input data");
		System.out.println("masukkan pilihan:\n 1.tambah data\n 2.tampilkan");
		System.out.print("pilihan anda: ");
		BufferedReader input=new BufferedReader(new InputStreamReader(System.in));
		String option = input.readLine();
		if(option.equals("1")){
			System.out.print("masukkan data(name): ");
			String name=input.readLine();
			names.add(name);
			readInput();

		}
		else{
			for(String name:names){
				System.out.println(name);
			}	
		}
	}
	public static void main(String[] args)throws IOException {
		names=new ArrayList<>();
		readInput();
	}
}
