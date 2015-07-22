package Sockets;

import java.io.*;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Hammad
 */
public class UDPClient {

    private static String HOST = "localhost";
    private static int PORT = 6789;

    public static void main(String args[]) {
        try {

            DatagramSocket aSocket;
//            String message = "Client 1";
            aSocket = new DatagramSocket();

            InetAddress aHost = InetAddress.getByName(HOST);

            String message = getUserInput();
            byte[] m = message.getBytes();
            
            DatagramPacket request = new DatagramPacket(m, message.length(), aHost, PORT);
            aSocket.send(request);
            
            byte[] buffer = new byte[1000];
            DatagramPacket reply = new DatagramPacket(buffer, buffer.length);
            aSocket.receive(reply);

//            String received_message = toString(reply);
//            System.out.println("Message Received from Server: " + received_message);


        } catch (IOException ex) {
            Logger.getLogger(UDPClient.class.getName()).log(Level.SEVERE, null, ex);
        }
    }


 public static String getUserInput()
    {
        System.out.print("Enter your name and press Enter: ");
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        String name = null;
        try
        {
            name = br.readLine();
        }
        catch (IOException e)
        {
            System.out.println("Error!");
            System.exit(1);
        }
        return name;

    }



    public static String toString(DatagramPacket p)
    {
    return
      new String(p.getData(), 0, p.getLength());
  }

}
