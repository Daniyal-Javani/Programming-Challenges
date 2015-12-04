/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication2;

/**
 *
 * @author vahid
 */
public class JavaApplication2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int sum=0;
        for(int i =1,j=1;i*5<1000;i++){
            
            if(i%3==0 || i%5==0)
                sum+=i;
        }
        System.out.println(sum);
    }
}
