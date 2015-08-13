#include <stdio.h>

int isAge(int age);
void display(int age, char name[]);

int isAge(int age) {
	int isOk = 1;
	if(age < 0 || age > 150) {
		isOk = 0;
	}
	return isOk;
}

void display(int age, char name[]) {
	printf("My name is %s and I am %d years old!\n");
}

int main() {
	int my_age;
	int isContinue = 0;
	while(isContinue == 0) {
		printf("Please enter your age: ");
		scanf("%d",&my_age);
		isContinue = isAge(my_age);
	}
	display(my_age,"Ethan");
	return 0;
}