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
        BigInteger num;
        int count = 0;
        num = new BigInteger("2");
        num = num.pow(1000);
        String strNum = num.toString();
        for(int i = 0 ; i < strNum.length() ; i++){
            count += strNum.charAt(i) - 48;
        }
        System.out.println(count);
    }
}