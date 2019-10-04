import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Standard {

  public static void main(String args[]) throws IOException {
    System.out.println("Masukkan Nama: ");
    BufferedReader cin = new BufferedReader(new InputStreamReader(System.in));
    String name = cin.readLine();
    System.out.println("Masukkan Umur: ");
    int age = Integer.parseInt(cin.readLine());
    if (age >= 18) {
      System.out.println("Nama saya adalah: "+name +". Dan umur saya: "+ String.valueOf(age)+ " tahun. Saya sudah dewasa.");
    } else {
      System.out.println("Nama saya adalah: "+name +". Dan umur saya: "+ String.valueOf(age)+ " tahun. Saya belum dewasa.");
    }
  }
}