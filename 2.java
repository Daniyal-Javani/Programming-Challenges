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
        int first = 1,second = 2,tmp,sum=0;
        for (int i = 0; first < 4000000; i++) {
            tmp = second;
            second = first + second;
            first = tmp;
            if(first % 2 == 0)
                sum+=first;
        }
        System.out.println(sum);
    }
}
