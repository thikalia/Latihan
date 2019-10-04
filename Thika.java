public class Thika{
public static void main(String[] args) {
	System.out.println(penambahan(10,5));
	System.out.println(pengurangan(50,15));
	System.out.println(pembagian(225,25));
	System.out.println(perkalian(225,150));
}
public static int penambahan (int bilangan1,int bilangan2){
	return bilangan1+bilangan2;
}
public static int pengurangan (int bilangan1,int bilangan2){
	return bilangan1-bilangan2;

}
public static int pembagian (int bilangan1,int bilangan2){
	return (bilangan1/bilangan2);
}
public static int perkalian (int bilangan1,int bilangan2){
	return bilangan1*bilangan2;
}
}