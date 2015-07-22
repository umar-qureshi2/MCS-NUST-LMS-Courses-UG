package Sockets;

import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Hammad
 */
public class UDPServer {

    public static void main(String args[]) {
        try {
            DatagramSocket aSocket = new DatagramSocket(6789);
            byte[] buffer = new byte[1000];

            while (true) {

                System.out.println("Server Listening at Port : " + "6789");
                DatagramPacket request = new DatagramPacket(buffer, buffer.length);
                aSocket.receive(request);

                System.out.println("Message Received");

                String client_name = toString(request);
                System.out.println("Incoming message From Client: " + client_name);

                DatagramPacket reply = new DatagramPacket(request.getData(),
                        request.getLength(), request.getAddress(), request.getPort());
                aSocket.send(reply);

            }
        } catch (IOException ex) {
            Logger.getLogger(UDPClient.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public static String toString(DatagramPacket p)
    {
    return
      new String(p.getData(), 0, p.getLength());
    }

}
