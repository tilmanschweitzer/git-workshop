package de.tilmanpotthof.workshop;

import java.util.ArrayList;
import java.util.List;

public class WorkshopParticipant {
  private final String name;
  private final String role;
  private final List<Question> questions;

  public WorkshopParticipant(String name, String role) {
    this.name = name;
    this.role = role;
    this.questions = new ArrayList<>();
  }

  public String getName() {
    return name;
  }

  public String getRole() {
    return role;
  }

  public List<Question> getQuestions() {
    return new ArrayList<>(questions);
  }

  public WorkshopParticipant addOpenQuestion(String openQuestion) {
    this.questions.add(new Question(openQuestion, false));
    return this;
  }

  public WorkshopParticipant addAnsweredQuestion(String answeredQuestion) {
    this.questions.add(new Question(answeredQuestion, true));
    return this;
  }
}
