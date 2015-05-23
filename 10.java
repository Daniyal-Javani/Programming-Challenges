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
    public static boolean isPrime(long num){
        if(num == 2){
            return true;
        }
        if( num == 1){
            return false;
        }
        for(long i = 3 ; i < Math.sqrt(num) + 1 ; i += 2 ){
            if( num % i == 0)
                return false;
        }
        return true;
    }
    public static void main(String[] args) {
        long sum = 2;
        for(long i = 3 ; i < 2000000 ; i+=2){
            if(isPrime(i)){
                sum += i;
            }
        }
        System.out.println(sum);
    }
}
