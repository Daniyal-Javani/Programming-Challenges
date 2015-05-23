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
public static boolean checkPalindrome(int num){
        String stringAns = "" + num;
        char[] charArray = stringAns.toCharArray();
        for (int i = 0; i < 3; i++) {
            if(charArray[i] != charArray[5-i])
                return false;
        }
        return true;
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int max = 0;
        for(int i = 999; i > 900 ; i--){
            for(int j = 999; j > 900 ; j--){
                if(checkPalindrome(i*j) && i*j>max){
                    max = i*j;
                }
            }
        }
        System.out.println(max);
    }
}
