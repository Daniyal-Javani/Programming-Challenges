/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication2;

import java.math.BigInteger;

/**
 *
 * @author Daniyal Javani
 */
public class JavaApplication2 {
    /**
     * @param args the command line arguments
     */

    public static void main(String[] args) {
        long[ ][ ] table = new long[21][21];
        
        //init
        for(int i = 1; i < 21 ; i++){
            table[i][0] = 1;
            table[0][i] = 1;
        }
        
        for(int i = 0 ; i < 20 ; i++){
            for(int j = 0 ; j < 20 ; j++){
                table[i+1][1+j] = table[i+1][j] + table[i][j+1]; 
                System.out.println(""+table[i+1][1+j] + '=' + table[i+1][j] + '+' +
                        table[i][j+1]);
            }
        }
            
        
        System.out.println(table[19][19]); 
        
        
    }
}