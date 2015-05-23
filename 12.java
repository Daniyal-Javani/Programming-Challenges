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
    public static boolean dividor(long num){
        int div = 0 ;
        for(long i = 1 ; i < Math.sqrt(num) + 1 ; i++ ){
            if( num % i == 0)
                div++;
        }
        System.out.println(div * 2);
        if(div > 500 / 2){
            return true;
        }
        else{
            return false;
        }
    }
    public static void main(String[] args) {
        long tr = 1;
        for( long i = 2;  ; i++){
            tr += i;
            if(dividor(tr)){
                break;
            }
            if(tr % 100000 < 100){
                System.out.println(tr);
            }

        }
        System.out.println(tr);
    }
}