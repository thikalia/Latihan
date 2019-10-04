import javax.swing.*;  
public class SwingExampleList  { 
public static void main(String args[])  {  
   JFrame frame= new JFrame();  
        DefaultListModel<String> l1 = new DefaultListModel<>();  
          l1.addElement("Thika1");
          l1.addElement("Item2");  
          l1.addElement("Item3");  
          l1.addElement("Item4");  
          JList<String> list = new JList<>(l1);  
          list.setBounds(0,0, 100,100);  
          frame.add(list);  
          frame.setSize(400,400);  
          frame.setLayout(null);  
          frame.setVisible(true); 
}
}  