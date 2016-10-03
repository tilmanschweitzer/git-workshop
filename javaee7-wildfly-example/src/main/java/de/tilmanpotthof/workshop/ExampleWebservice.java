package de.tilmanpotthof.workshop;


import com.fasterxml.jackson.databind.JsonMappingException;

import javax.ejb.Stateless;
import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import java.util.ArrayList;
import java.util.List;

@Stateless
@Path("/example")
public class ExampleWebservice {

  @GET
  @Produces(MediaType.APPLICATION_JSON)
  public Response example() throws JsonMappingException {
    List<WorkshopParticipant> workshopParticipants = new ArrayList<>();

    workshopParticipants.add(new WorkshopParticipant("Tilman Potthof", "Workshop Trainer")
            .addAnsweredQuestion("Where is the workshop?")
            .addOpenQuestion("Where is the coffee machine?"));

    return Response.ok(workshopParticipants).build();
  }

}
