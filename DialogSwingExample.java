import javax.swing.JFrame;
import javax.swing.JOptionPane;

public class DialogSwingExample {
    public static void main(String[] args) {
        JFrame f = new JFrame();
        JOptionPane.showMessageDialog(f, "Contoh GUI pertama (Dialog)", "Contoh Dialog", JOptionPane.INFORMATION_MESSAGE);
    }
}