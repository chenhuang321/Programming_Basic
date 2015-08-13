#include <stdio.h>
//simple examples about inputs and outputs

int main() {
	//create an integer datatype named 'Number'
	int number;
	printf("Please input the number between 0 and 10!\n");
	//prompt and validate the number from customer!
	scanf("%d",&number);
	if(number < 0 || number > 10)
		printf("Invalid number!\n");
	else
		printf("Valid number!\n");
	return 0;
}