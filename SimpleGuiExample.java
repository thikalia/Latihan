import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;

public class SimpleGuiExample extends JFrame {
    private static final long serialVersionUID = 1L;
    private JLabel labelName, labelAge, labelAddress;
    private JTextField fieldName, fieldAge;
    private JTextArea fieldAddress;
    private JButton addButton;
    private String combinedData = "";

    public static void main(String[] args) {
        new SimpleGuiExample();
    }

    SimpleGuiExample() {
        setupFrame();
        setupNameField();
        setupAgeField();
        setupAddressField();
        setupButton();
        showView();
    }

    private void showView() {
        setVisible(true);
    }

    private void setupFrame() {
        setSize(340, 370);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setTitle("Contoh Program Input Biodata");
        getContentPane().setLayout(null);
    }

    private void setupNameField() {
        // Add "Nama" label to frame
        labelName = new JLabel("Nama");
        labelName.setBounds(20, 20, 100, 10); 
        getContentPane().add(labelName);

        // Add "Nama" field to frame
        fieldName = new JTextField();
        fieldName.setBounds(20, 40, 300, 30);  
        getContentPane().add(fieldName);
    }

    private void setupAgeField() {
        // Add "Usia" label to frame
        labelAge = new JLabel("Usia");
        labelAge.setBounds(20, 80, 100, 10);
        getContentPane().add(labelAge);

        // Add "Usia" field to frame
        fieldAge = new JTextField();
        fieldAge.setBounds(20, 100, 300, 30);  
        getContentPane().add(fieldAge);
    }

    private void setupAddressField() {
        // Add "Alamat" label to frame
        labelAddress = new JLabel("Alamat");
        labelAddress.setBounds(20, 140, 100, 10);
        getContentPane().add(labelAddress);

        // Add "Alamat" field to frame
        fieldAddress = new JTextArea();
        fieldAddress.setSize(200, 100); 
        fieldAddress.setBounds(20, 160, 300, 120);
        getContentPane().add(fieldAddress);
    }

    private void setupButton() {
        // Add "Tambah" button to frame
        addButton = new JButton("Tambah");
        addButton.setBounds(20, 290, 50, 30);
        addButton.setSize(100, 40);
        addButton.addActionListener(new ActionListener(){
            @Override
            public void actionPerformed(ActionEvent e) {
                if (fieldName.getText().isEmpty()) {
                    JOptionPane.showMessageDialog(getContentPane(), "Nama tidak boleh kosong", "Hasil Input Kalian", JOptionPane.ERROR_MESSAGE);
                } else if (fieldAge.getText().isEmpty()) {
                    JOptionPane.showMessageDialog(getContentPane(), "Umur tidak boleh kosong", "Hasil Input Kalian", JOptionPane.ERROR_MESSAGE);
                } else if (fieldAddress.getText().isEmpty()) {
                    JOptionPane.showMessageDialog(getContentPane(), "Alamat tidak boleh kosong", "Hasil Input Kalian", JOptionPane.ERROR_MESSAGE);
                } else {
                    combinedData = "Nama: "+fieldName.getText() 
                    + "\n" +"Usia: "+ fieldAge.getText() + "\n" + "Alamat: "+fieldAddress.getText();
                    JOptionPane.showMessageDialog(getContentPane(), combinedData, "Hasil Input Kalian", JOptionPane.INFORMATION_MESSAGE);
                }
            }
        });
        getContentPane().add(addButton);
    }
}