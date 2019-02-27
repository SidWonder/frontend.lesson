/*
Программа расчитывает кол-во потраченной в душе воды
Начальные данные 1 минута тратится 6литров или 12 бутылок воды
*/
#include <stdio.h>
#include <cs50.h>

int boot ;
int mint ;

int main(void)
{
    while(true){
        mint = get_int("Сколько минут вы провели в душе? ");
        if (mint>0){
            break;
        }
    }
boot = 12 * mint;
printf("Вы израсходовали %i бутылок воды\n", boot );
}