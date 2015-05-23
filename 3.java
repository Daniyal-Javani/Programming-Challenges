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
    public static boolean isPrime(int num){
        for(int j = num/2;j>1;j--){
            if(num%j==0){
                return false;
            }
        }
        return true;
    }
    public static void main(String[] args) {
        long num = 600851475143L;
        int max=0;
        for (int i = 2; num>1 ; i++) {
            if(isPrime(i)){
                //i variable is a prime number
                while(num%i==0){
                    num/=i;
                    max=i;
                }
                
            }
           
         
        }
        System.out.println(max);
    }
}
