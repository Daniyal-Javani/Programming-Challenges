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
public static boolean checkDividable(int num){
        for (int i = 1; i < 21; i++) {
            if( num % i != 0 )
                return false;
        }
        return true;
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        for(int i = 20; ; i++){
            if(checkDividable(i)){
                System.out.println(i);
                break;
            }
        }
    }
}
