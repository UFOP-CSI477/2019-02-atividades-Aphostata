package exercicio;

import java.util.Scanner;

public class Exercicio {

    public void VerificaClausula() {
        Scanner entrada = new Scanner(System.in);

        String clausula;
        String regra;
        String nome1;
        String nome2;
        String ArrayRegra[] = new String[3];
        String ArrayNomes[] = new String[2];

        System.out.println("Digite a clausula nesse formato regra;nome 1,nome 2");
        clausula = entrada.next();
        ArrayRegra = clausula.split(";");
        for (int i = 0; i < ArrayRegra.length; i++) {
            System.out.println(ArrayRegra[0] + " " + ArrayRegra[1]);
        }

        if (ArrayRegra[0].equals("pai")) {
            ArrayNomes = ArrayRegra[1].split(",");
            nome1 = ArrayNomes[0];
            nome2 = ArrayNomes[1];

            System.out.println("Nome1 =" + nome1 + " " + "Nome2 = " + nome2);

            if (nome1.equals("Charles") && nome2.equals("Willian")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Charles") && nome2.equals("Harry")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Andrew") && nome2.equals("Beatrice")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Andrew") && nome2.equals("Eugenie")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Edward") && nome2.equals("James")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Edward") && nome2.equals("Louise")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Willian") && nome2.equals("George")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Willian") && nome2.equals("Charlotte")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Willian") && nome2.equals("Louis")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Harry") && nome2.equals("Archie")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Peter") && nome2.equals("Savannah")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Peter") && nome2.equals("Isla")) {
                System.out.println("Verdadeiro");
            } else {
                System.out.println("Falso");
            }
        } else if (ArrayRegra[0].equals("mae")) {
            System.out.print("mae entrou");

            ArrayNomes = ArrayRegra[1].split(",");
            nome1 = ArrayNomes[0];
            nome2 = ArrayNomes[1];
            if (nome1.equals("Elizabeth") && nome2.equals("Charles")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Anne")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Andrew")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Edward")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Anne") && nome2.equals("Zara")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Zara") && nome2.equals("Mia")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Zara") && nome2.equals("Isla")) {
                System.out.println("Verdadeiro");
            } else {
                System.out.println("Falso");
            }

        } else if (ArrayRegra[0].equals("avo")) {
            System.out.print("avo entrou");

            ArrayNomes = ArrayRegra[1].split(",");
            nome1 = ArrayNomes[0];
            nome2 = ArrayNomes[1];
            if (nome1.equals("Elizabeth") && nome2.equals("Harry")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Willian")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Beatrice")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Eugenie")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Louise")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("James")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Peter")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Elizabeth") && nome2.equals("Zara")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Philip") && nome2.equals("Willian")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Philip") && nome2.equals("Beatrice")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Philip") && nome2.equals("Eugenie")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Philip") && nome2.equals("Louise")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Philip") && nome2.equals("James")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Philip") && nome2.equals("Peter")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Philip") && nome2.equals("Zara")) {
                System.out.println("Verdadeiro");
            } else if (nome1.equals("Philip") && nome2.equals("Harry")) {
                System.out.println("Verdadeiro");
            } else {
                System.out.println("Falso");
            }
        } else {
            System.out.println("Digite valor para clausula sendo 'pai', 'mae', 'avo' !");
        }
    }

    public static void main(String[] args) {
        Exercicio ex = new Exercicio();
        ex.VerificaClausula();
    }

}
