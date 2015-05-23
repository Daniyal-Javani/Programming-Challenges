/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication2;

/**
 *
 * @author Daniyal Javani
 */
public class JavaApplication2 {
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int sum1=0,sum2=0;
        for(int i = 0; i<101 ; i++){
            sum1 += (int)Math.pow(i,2);
            sum2 += i;
        }
        System.out.println((int)Math.pow(sum2, 2)-sum1);
    }
}
