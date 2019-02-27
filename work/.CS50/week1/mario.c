#include <stdio.h>
#include <cs50.h>

int num;

int main(void){
    while(true){
        num = get_int("Введите число до 23:");
        if(num>0 && num<24){break;}
    }

    for(int z = 21; z>0; z--){printf(" ");}
    printf("##\n");

    for(int r = 2; r<=num; r++ )
    {
        //Space
        int space =22-r;
        for (int k=1; space>=k ;k++ ){
            printf(" ");
        }
        // #
        for(int i = r+2; i>1; i--){printf("#");}

        printf("\n");
        space--;
    }
}
