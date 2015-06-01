package com.basistech.rosette.apimodel.jackson;

import com.basistech.rosette.apimodel.CategoryOptions;
import com.basistech.rosette.apimodel.InputUnit;
import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonProperty;

public class CategoryRequestMixin {
    @JsonCreator
    public CategoryRequestMixin(
            @JsonProperty("language") String language,
            @JsonProperty("content") String content,
            @JsonProperty("contentUri") String contentUri,
            @JsonProperty("contentType") String contentType,
            @JsonProperty("unit") InputUnit unit,
            @JsonProperty("options") CategoryOptions options
    ) {
        //
    }

}
