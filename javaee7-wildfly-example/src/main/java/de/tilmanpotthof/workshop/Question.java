package de.tilmanpotthof.workshop;

public class Question {

  private final String question;
  private final boolean answered;

  public Question(String question, boolean answered) {
    this.question = question;
    this.answered = answered;
  }

  public String getQuestion() {
    return question;
  }

  public boolean isAnswered() {
    return answered;
  }
}
