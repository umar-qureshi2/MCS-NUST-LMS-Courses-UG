
package Sockets;

import java.io.IOException;
import java.net.DatagramSocket;

/**
 *
 * @author Hammad
 */
public class UDPPortScanner {

    public static void main(String args[]) {
        int startport = 1024;
        int stopport = 10000;

        for (int port = startport; port <= stopport; port++)
        {
            try
            {
                System.out.println("Testing Port : " + port);
                DatagramSocket ds = new DatagramSocket(port);
                ds.close();
            } 
            catch (IOException ex)
            {
                System.out.println("UDP Port " + port + " is occupied.");
            }
        }

    }
}
