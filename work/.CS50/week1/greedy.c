/*
Здание3. Расчет, какое кол-во монет по 25,10,5 и 1 центу необходимо выдать в зависимости от введенной суммы.
*/

#include <stdio.h>
#include <cs50.h>
#include <math.h>

float cashOut =0.0;
int cash =0;
int one, five, ten, twentyFive;

int main(void){
    while(true){
    	cashOut = get_float("Сколько нужно выдать сдачи? В формате *.*$ \n");
    	if(cashOut >0){
    		break;
    	}
    }
//printf("Сдача %.50f \n", cashOut);

cash = cashOut*10000/100; //Удаляем неточность float
printf("Сдача: %i центов \n", cash);

while(true){
    while(cash>=25){
        cash=cash-25;
        twentyFive++;
        continue;
    }
    while(cash>=10){
        cash=cash-10;
        ten++;
        continue;
    }
    while(cash>=5){
        cash=cash-5;
        five++;
        continue;
    }
    while (cash>=1){
        cash=cash-1;
        one++;
        continue;
    }
    break;
}
printf("Нужно выдать сдачу:  \n %i по 25 центов \n %i по 10 центов \n %i по 5 центов \n %i по 1 центу\n", twentyFive, ten, five, one);

}