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
    public static int collatz(long n){
        int i = 0;
        while(n>1){
            if(n%2 == 0)
                n = n / 2;
            else
                n = 3*n+1;
            i++;
//            System.out.println(n);
        }
        return i;
    }

    public static void main(String[] args) {
        long n = 1000000;
        int num;
        int maxNum = 0;
        long maxN = 0;
        while(n > 1){
//            System.out.println(n);
            num = collatz(n);
            if(num > maxNum){
               maxNum = num;
               maxN = n;
            }
                
            n--;
        }
        
        System.out.println(maxN);
        
        
        
        
    }
}